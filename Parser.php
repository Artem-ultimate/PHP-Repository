<?

class Parser{
    protected $text;
    protected $pos;

    public function __construct($text){
        $this->text = $text;
        $this->pos = 0;
    }

    public function moveTo($find){
        $this->pos = strpos($this->text, $find, $this->pos) + strlen($find);
        return $this;
    }

    public function readTo($find){
        $start = $this->pos;
        $this->moveTo($find);
        return substr($this->text, $start, $this->pos - $start - strlen($find));
    } 
    }

$text = '...
    <span>1</span>
    ...
    <a href="./buy">
    <span>2100</span>
    </a>...';

$parser = new Parser($text);
echo $parser->moveTo('<a href="./buy">')->moveTo('<span>')->readTo('<');
