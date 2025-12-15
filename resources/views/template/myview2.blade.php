@extends('template.default')
@section('title','MyView2')
@section('header1',"MyView2")
@section('content')

    <?php
        $myphp = "WOW PHP";
        echo "<h1> Hello PHP </h1>";
        // $myarry = [1,2,3,4];
        $myarry = Array(1,2,3,4);

        echo $myarry[2];
        echo "<br>";         //เว้นบรรทัด
        var_dump($myarry);  //ใช้แสดงผล array
        echo "<br>";
        print_r($myarry);   //ใช้แสดงผล array
        echo "<br>";

        $myarry2["a"] = 1;
        $myarry2[] = 2;
        $myarry2[] = 3;
        $myarry2[] = [1,2,[3,4]];
        print_r($myarry2);
        echo "<br>";
        for($i = 0; $i<count($myarry);$i++){
            echo "item at $i is ".$myarry[$i]."<br>";
        }
        for($i = 0; $i<sizeof($myarry);$i++){
            echo "item at $i is ".$myarry[$i]."<br>";
        }
        foreach($myarry as $item){
            echo "item: ".$item."<br>";
        }
        foreach($myarry as $index => $item){
            echo "item: ".$item."<br>";
        }
    ?>
    <h1><?php echo "Hello PHP2"; ?></h1>
    <h1><?php printf("Hello PHP3"); ?></h1>
    <h1>{{"Hello PHP4"}}</h1> <!-- ใช้ได้เฉพาะส่วนของ view เท่านั้น -->
    <h1><?= "Hello PHP5" ?></h1>
    <h1><?php echo $myphp; ?></h1>

    <!--
    <h1>This is my view</h1>
    <input type="text" id="myinput" value="input text value"/>
    <button onclick="myfunc()">Check1</button>
    <button onclick="myfunc2()">Check2</button>
    <button onclick="myfunc3()">Check3</button>
    -->
@endsection

@push('scripts')
    <h1>my view 2</h1>
@endpush

@push('scripts')
    <h1>My view 3</h1>
@endpush

@push('scripts')
    <script>
        myvar = 1;
        let myvar2
        console.log(myvar)
        console.log(myvar2)
    </script>
    <script>
        myvar2 = "My Var 2"
        myvar2 = 2
        console.log(myvar, myvar2)
    </script>
    <script>
        function myfunc(){
            console.log(document.getElementById('myinput').value)
            document.getElementById('myinput').addClass("form-control")
            return
        }
        function myfunc2 = function(){
            console.log('myfunc2 called')
        }

        myfunc3 = () => console.log('myfunc3 called')

        function myfunc4(callback){
            console.log('myfunc4 called')
            callback()
        }
        myfunc4(myfunc3)

        console.log(document.getElementById('myinput').value)
    </script>
@endpush
