<?
$hostname	= 'localhost';
$sqluser	= 'root';
$sqlpass	= '';
$dbName		= '1to1chat';

@mysql_connect($hostname, $sqluser, $sqlpass)  or die( 'Connexion au serveur de donn�es impossible' ) ;
@mysql_select_db( $dbName ) or die( 'Unable to connect DATABASE' ) ;
?>