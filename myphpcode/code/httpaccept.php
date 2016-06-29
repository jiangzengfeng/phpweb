<?php

class httpaccept
{
	public $isfilterCC = 0; 
	
	public function start()//接受访问
	{
		if($isfilterCC==1)
		{
			netfilter::filterCC();
		}
		$pHttp=new http();//初始化HTTP
		$pHttp->start();//检查request,并初始化session、response
		
		$pAuthority=new authority();
		if(!$pAuthority->checkPermission())
		{
			
			exit;
		}
		
		$pHttp->getRequest();
		$pHttp->checkRequest();
		
		if(!$pAuthority->checkOperation())
		{
			
			exit;
		}
		
		$pHttp->DoOperation();
		
		sysLog::addlog();
		
	}	
}

?>