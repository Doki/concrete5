<?
defined('C5_EXECUTE') or die(_("Access Denied."));

Loader::model('page_theme');

/**
*
* This class is responsible for unpacking themes that have been zipped and uploaded to the system. 
* @package Pages
* @subpackage Themes
*/
class PageThemeRemote extends PageTheme {
	
	protected $remoteThumbURL='';
	protected $cID='';
	
	function loadTheme( $options=array() ){
		if($options['name']) $this->ptName=$options['name'];
		if($options['cID']) $this->cID=$options['cID'];
		if($options['handle']) $this->ptHandle=$options['handle'];
		if($options['description']) $this->ptDescription=$options['description'];
		if($options['url']) $this->ptURL=$options['url']; 
		if($options['thumbnail']) $this->remoteThumbURL=$options['thumbnail']; 
	}	
	public function getRemoteCollectionID(){ return $this->cID; }
	public function getThemeThumbnail() {
		if($this->remoteThumbURL)
			return $this->remoteThumbURL;
		return parent::getThemeThumbnail();
	}	
}

?>