function($let) {
	$search = ['A' ,'B' ,'E' ,'G' ,'I' ,'O' ,'P' ,'S' ,'T' ,'Z'];
	$replace = ['4' ,'8' ,'3' ,'6' ,'1' ,'0' ,'9' ,'5' ,'7' ,'2'];
	$subject = strtoupper($let);
	$num = str_replace($search, $replace, $subject);
	return strtolower($num);
}
