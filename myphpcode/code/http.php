<?php

class http
{
	
	
	
	public function start()
	{
		checkrequest();
	}
		
	public function checkrequest()//加入防注入功能 ，过滤关键词输入。
	{
			
	}
	public function startsession()//初始化session 
	{
		
	}
	public function startresponse()//初始化输出，实现伪静态化、生成静态化文件、过滤关键词等输出功能
	{
	}
		
}


?>