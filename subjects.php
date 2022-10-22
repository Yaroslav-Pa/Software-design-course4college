<? 
class Subjects{
    public $subjects_array = array(
        "Конструювання програмного забезпечення",
        "Комп’ютерні мережі",
        "Дискрета математика",
        "Фізика",
        "Фізкультура",
        "Історія"
    );

    public $students = "Шевченко, Сковорода, Українка, Сорока, Бандера";

    public function show(){
        foreach ($this -> subjects_array as $a){
            echo $a;
            echo "<br>";
        }
        echo "<hr>";
    }

    public function changeArray($Changing, $ToChange){
        $this -> subjects_array[array_search($Changing, $this->subjects_array)] = $ToChange;
    }

    public function changeArray2($Changing, $ToChange, $num){
        $count = 0;
        foreach ($this->subjects_array as $ind=>$a){
            if ($a == $Changing){
                $count++;
            }
            if ($count == $num){
                $a = str_replace($Changing, $ToChange, $a);
                $this->subjects_array[$ind] = $a;
            }
        }
    }

    public function expension() {
        foreach ($this->subjects_array as $index=>$v){
            $this->subjects_array[$index] = array(
                "name" => $v,
                "hours" => rand(10,50)
            );
        }
    }

    public function show_as_table($table=null){
        $table = $table == null ? $this->subjects_array : $table;
        foreach($table as $subject){
            echo "subject: ".$subject["name"].", hours: ".$subject["hours"]."<br>";
        }
        echo "<hr>";
    }

    public function split_array(){
        $splitted_array = array_chunk($this->subjects_array, 3);
        $this -> show_as_table($splitted_array[0]);
        $this -> show_as_table($splitted_array[1]);
    }

}
?>
