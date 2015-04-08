<div class="calculator" style="background:rgb(45, 68, 57);">
    <h3>Scientific Calculator</h3>
    <div class="calc-screen"> 
        <input type="text" value="0" size="15" id="resultArea"/> 
    </div>
    <div class="calc-buttons-area">
        <div class="calc-buttons-row">
            <input type="button" value="1"/>
            <input type="button" value="2"/>
            <input type="button" value="3"/>
        </div>
        <div class="calc-buttons-row">
            <input type="button" value="4"/>
            <input type="button" value="5"/>
            <input type="button" value="6"/>
        </div>
        <div class="calc-buttons-row">
            <input type="button" value="7"/>
            <input type="button" value="8"/>
            <input type="button" value="9"/>
        </div>
        <div class="calc-buttons-row">
            <input type="button" value="+"/>
            <input type="button" value="0"/>
            <input type="button" value="-"/>
        </div>
        <div class="calc-buttons-row">
            <input type="button" value="X"/>
            <input type="button" value="="/>
            <input type="button" value="/"/>
        </div>
        <div class="calc-buttons-row">
            <input type="button" value="sin"/>
            <input type="button" value="cos"/>
            <input type="button" value="tan"/>
        </div>
        <div class="calc-buttons-row">
            <input type="button" value="log"/>
            <input type="button" value="Mod"/>
            <input type="button" value="x2"/>
        </div>
        <div class="calc-buttons-row">
            <input type="button" value="pi"/>
            <input type="button" value="("/>
            <input type="button" value=")"/>
        </div>
    </div>
</div>
<style>
    .calculator{width:156px;background-color:darkgray;text-align:center;border:6px outset gray;border-radius:7px;}
    .calculator h3{color:white;font-family: arial;font-size: 14px;}
    .calc-screen{width:80%;padding:4px 5px;background-color:black;margin:0 auto;}
    .calc-screen input{background-color:greenyellow;color:black;text-align:right;font-weight: bold; width:120px;}
    .calc-buttons-area{width:84%;margin:3 auto;}
    .calc-buttons-row{background-color:black;}
    .calc-buttons-row input{border:1px outset grey;width:40px;}
</style>
