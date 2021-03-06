<?php

//Classe page
class Page {

    private $name;
    private $path;
    //articles/contenu du la page
    private $articles = array();
    //les sous-page
    private $pages = array();
	//images de la page (background, ...)
	private $images = array ();
    private $c_date;
    private $m_date;
	
	private $hidden = false;

    //constructor
    function __construct($page) {
        if (!empty($page))
            $this->affectePage($page);

    }

    //fonction de creation et affectation des variables
    function affectePage($page) {
	
        foreach ($page as $col => $value) {
            switch ($col) {
                case 'page_name':
                    $this->setName($value);
                    break;
                case 'page_path':
                    $this->setPath($value);
                    break;
                case 'page_articles':
                    $this->setArticles($value);
                    break;
                case 'page_pages':
                    $this->setPages($value);
                    break;
				case 'page_images':
                    $this->setImages($value);
                    break;
                case 'page_create_date':
                    $this->setCreateDate($value);
                    break;
                case 'page_modify_date':
                    $this->setModifyDate($value);
                    break;
				case 'page_hidden':
                    $this->setHidden($value);
                    break;
                default:
                    break;
            }
        }
		
    }

    //getters
    public function getName(){
      return $this->name;
    }

    public function getPath(){
      return $this->path;
    }

    public function getArticles(){
      return $this->articles;
    }

    public function getPages(){
      return $this->pages;
    }
	
	public function getImages(){
      return $this->images;
    }

    public function getCreateDate(){
      return $this->c_date;
    }

    public function getModifyDate(){
      return $this->m_date;
    }
	
	public function isHidden(){
      return $this->hidden;
    }
	

    //setters
    public function setName($name){
      $this->name = $name;
    }

    public function setPath($path){
      $this->path = $path;
    }

    public function setArticles($articles){
      $this->articles = $articles;
    }

    public function setPages($pages){
      $this->pages = $pages;
    }
	
	public function setImages($images){
      $this->images = $images;
    }

    public function setCreateDate($date){
      $this->c_date = $date;
    }

    public function setModifyDate($date){
      $this->m_date = $date;
    }
	
	public function setHidden($bool){
      $this->hidden = $bool;
    }

}
