<?php
require __DIR__ . '/vendor/autoload.php';
use Respect\Validation\Validator as V;

// stuff that would be handled in a router
$data = json_decode(file_get_contents('php://input'), false);

$form = new Form;
$d = $form->process($data);
echo json_encode($d);

class Form{

    public $errors = [];
    public $data = [];

    public function process($data){

        $validator = V::attribute('name', V::noWhitespace()->alpha())
            ->attribute('number', V::noWhitespace()->digit());

        try{
            $validator->assert($data);
            // if it passes the validation then assign the object to data
            // formatting the data so it's more friendly
            $this->data = $this->format($data);
        }catch(Exception $e){
            $this->errors = $e->getMessages();
        }

        return $this;
    }

    private function format($data){
        $r = get_object_vars($data);
        $formatted = [];
        foreach($r as $key=>$val){
            $formatted[] = [
                'name' => $key, 'value' => $val
            ];
        }
        return $formatted;
    }
}
?>
