<?php

class TemplateVCBuilder
{
    private $type = "";
    private $parent;
    private $css;
    private $globalCss;
    private $class;
    private $content;
    private $child = Array();
    private $img;
    private $inlineTags;
    private $contentIsFirst = true;
    private $id;

    public function __construct( $parent, $type) {
        $this->type = $type;
        $this->parent = $parent;
    }

    public function contentIsFirst($flag) {
        $this->contentIsFirst = $flag;
    }

    public function addChildBlock($type) {
        $block =  new TemplateVCBuilder($this,$type);
        return $block;
    }

    public function addButton($btn) {

        $button =  new TemplateVCBuilder($this,'a');
        $button->addInlineTag("href",$btn['url'])
            ->addClass("btn")
            ->addInlineTag('target',$btn['target'])
            ->setContent($btn['title']);
        return $button;
    }

    public function addImageChild($image,$width,$height) {
        $svgBlock =  new TemplateVCBuilder($this,'div');
        $svgBlock->addClass("ico");
        $svgBlock->addStyle('width:',$width);
        $svgBlock->addStyle('height:',$height);

        $imageBlock =  new TemplateVCBuilder($svgBlock,'img');
        $imageBlock->addInlineTag('src','"'.$image[0].'"');

       // $imageBlock->addClass("style-svg");
        $imageBlock->done();
        return $svgBlock;
    }

    public function addStyledText($sText) {

        $json = json_decode(str_replace("\n", "<br/>", $sText));

        $block = $this->addChildBlock($json->block_type?$json->block_type:"div");
        if( isset($json->font_family) ) {
            $block->addStyle("font-family:",$json->font_family);
        }
        if( isset($json->font_size) ) {
            $block->addStyle("font-size:",$json->font_size);
        }
        if( isset($json->bold) ) {
            if($json->bold) { $font_weight = 'bold'; } else { $font_weight = 'normal'; }
            $block->addStyle("font-weight:",$font_weight);
        }
        if( isset($json->italic) ) {
            if($json->italic) { $font_style = 'italic'; } else { $font_style = 'normal'; }
            $block->addStyle("font-style:",$font_style);
        }
        if( isset($json->align) ) {
            $block->addStyle("text-align:",$json->align);
        }
        if( isset($json->color) ) {
            $block->addStyle("color:",$json->color);
        }
        if( isset($json->value) ) {
            $block->setContent($json->value);
        }
        return $block;
    }

    public function addElement($el) {
        $this->child[]=$el;
    }

    public function setGlobalCss($globalCss)
    {
        $this->globalCss = $globalCss;
        return $this;
    }
    public function addInlineTag($inlineTag,$value,$valid = false) {
        if($value || $valid) {
            $this->inlineTags.=" ".$inlineTag." = ".$value;
        }
        return $this;
    }

    public function done () {
            $this->parent->addElement($this);
            return $this->parent;
    }

    public function setContent($content)
    {
        if($content) {
            $this->content = $content;
        }
        return $this;
    }

    public function addStyle($cssParam,$cssVal) {
        if($cssVal) {
            $this->css .= $cssParam.$cssVal.";";
        }
        return $this;
    }
    public function addClass($class) {
        if($class) {
            $this->class .= " " . $class;
        }
        return $this;
    }
    public function setId($id) {
        if($id) {
            $this->id =$id;
        }
        return $this;
    }

    public function setImgUrl($img)
    {
        $this->img = $img;
        return $this;
    }

    public function printHtml($h="") {
        $classHtml = "";
        $cssHtml = "";
        $imgUrl="";
        $inlineHtml = "";
        $idHtml = "";

        if($this->id) {
            $idHtml = "id='{$this->id}'";
        }
        if($this->class) {
            $classHtml = "class='".$this->class."'";
        }
        if($this->css) {
            $cssHtml = "style='".$this->css."'";
        }
        if($this->img) {
            $imgUrl = "src='".$this->img."'";
        }
        if($this->globalCss) {
            echo "<style>".$this->globalCss."</style>";
        }
        if($this->inlineTags) {
            $inlineHtml = $this->inlineTags;
        }

        echo "<$this->type $idHtml $classHtml $cssHtml $imgUrl $inlineHtml>";
        if($this->contentIsFirst) {
            if ($this->content) {
                if ($this->type == 'ul') {
                    echo $this->convertToLi($this->content);
                } else {
                    echo $this->content;
                }
            }

            foreach ($this->child as $block) {
                $block->printHtml();
            }
        } else {
            foreach ($this->child as $block) {
                $block->printHtml();
            }
            if ($this->content) {
                if ($this->type == 'ul') {
                    echo $this->convertToLi($this->content);
                } else {
                    echo $this->content;
                }
            }
        }
        echo $h;
        echo "</".$this->type.">";
    }

    private function convertToLi($data) {
        $liBlocks = explode(PHP_EOL,$data);
        $html = "";
        foreach ($liBlocks as $li) {
            if($li)
            $html .= "<li>".$li."</li>";
        }
        return $html;
    }
}


