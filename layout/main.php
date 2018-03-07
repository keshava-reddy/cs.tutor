<!DOCTYPE html>
<html>
    <body>
        <table style="width:100%">
            <tr> <th colspan="2" id="header"> Welcome To CS Tutor</th> </tr>
            <tr>
                <td id="menu">
                    <div>
                        <div><b>ALGORITHM</b></div>
                        <div>&nbsp; &nbsp; <a href="/algorithm/sorting">Sorting</a></div>
                        <div>&nbsp; &nbsp; <a href="/algorithm/asymptotic_complexity">Asymptotic Complexity</a></div>
                        <div>&nbsp;</div>
                        <div><b>MATH</b></div>
                        <div>&nbsp; &nbsp; <a href="/math/multiplication_table">Multiplication Table</a></div>
                        <div><b></b></div>
                    </div>
                </td>
                <td id="content"> 
			<h1><?= $title ?></h1>
                    	<div><?= $content ?></div> 
                </td>
            </tr>
        </table>

        <style>
            h1 { text-align:center; color: blue; padding: 40px; }
            body { padding: 32px; background-color:#DDD; }
            #header { background-color:red; height: 100px; font-size: 72px; color:#FFF; text-shadow: -4px -2px #777; }
            #menu { background-color:green; width: 180px; vertical-align:top; font-size: 16px; padding: 30px 10px; color:#FFF; }
            #menu a:link, #menu a:visited, #menu a:hover, #menu a:active { color: white; text-decoration: none; }
            #content { background-color:white; vertical-align:top; height: 480px; }
        </style>
    </body>
</html>
