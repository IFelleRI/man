<?php
class CAjaxRequest
{
	protected $arParams;
	protected $arResult;
	private $ajaxDir = "/local/ajax/includes";

	public function __construct(&$arParams = array(), &$arResult = array())
	{
		$this->arParams = &$arParams;
		$this->arResult = &$arResult;
	}

	private function forSql($array)
	{
		$connection = Bitrix\Main\Application::getConnection();
		$sqlHelper = $connection->getSqlHelper();

		foreach ( $array as &$item )
		{
			if ( is_array( $item ) )
			{
				$item = $this->forSql( $item );
			}
			else
			{
				$item = $sqlHelper->forSql( $item );
			}
		}

		return $array;
	}

	public function execute()
	{
		\Bitrix\Main\Loader::includeModule( "main" );
		\Bitrix\Main\Loader::includeModule( "iblock" );
		\Bitrix\Main\Loader::includeModule( "wid.sdk" );

		global $APPLICATION;

		$this->arParams = $this->forSql( $_POST );
		foreach ( $_POST as $key => $value )
		{
			$this->arParams[ "~" . $key ] = $value;
		}

		$action = explode( "/", $this->arParams[ 'action' ] );

		$fullPath = \Bitrix\Main\Application::getDocumentRoot() . $this->ajaxDir . "/" . $action[ 0 ] . '.php';
		$file = new Bitrix\Main\IO\File( $fullPath );

		if ( !$file->isExists() || !$file->isReadable() )
		{
			$this->arResult = array(
				"STATUS" => "ERROR",
				"MESSAGE" => "Action '" . $this->arParams[ 'action' ] . "' not found",
			);
		}
		else
		{
			$arResult = &$this->arResult;
			$arParams = &$this->arParams;
			include $fullPath;

			if ( isset( $action[ 1 ] ) )
			{
				$className = 'Laco\AjaxRequest\\' . $action[ 0 ];
				if ( class_exists( $className ) )
				{
					$classAction = new $className( $arParams, $arResult );
					if ( method_exists( $classAction, $action[ 1 ] ) )
					{
						$arResult = $classAction->{$action[ 1 ]}();
					}
					else
					{
						$this->arResult = array(
							"STATUS" => "ERROR",
							"MESSAGE" => "Action '" . $this->arParams[ 'action' ] . "' not found",
						);
					}
				}
				else
				{
					$this->arResult = array(
						"STATUS" => "ERROR",
						"MESSAGE" => "Action '" . $action[ 0 ] . "' not found",
					);
				}

			}
		}
		$this->arResult[ "INPUT" ] = $this->arParams;

		if ( strlen( $this->arParams[ "ajaxCallback" ] ) && ( !isset( $this->arResult[ 'ajaxCallback' ] ) || empty( $this->arResult[ 'ajaxCallback' ] )) )
			$this->arResult[ 'ajaxCallback' ] = $this->arParams[ "ajaxCallback" ];

		echo json_encode( $this->arResult );
	}
}