<html>
<head>
    <link href="css/estilosemail.css" rel="stylesheet">
</head>
<body>
<div class="div">
    <table class="tablewidth">
        <tr>
            <td></td>
            <td class="tdcolor">
                <div class="divinside">
                    <table class="tableinside">
                        <tr>
                            <td></td>
                            <td>
                                <div>
                                    <table class="tablewidth">
                                        <tr>
                                            <td rowspan="2" class="td">
                                                <img class="imgposition"  src="https://image.ibb.co/mXAHpG/racetic.png" />

                                                <img src="https://image.ibb.co/mXAHpG/racetic.png" alt="racetic" border="0" />
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                            <td></td>
                        </tr>
                    </table>
                    <table class="tabletext">
                        <tr>
                            <td class="tdtext" >
                                <p>Gracias por registrarte.</p>
                                <p><br />Para registrar tu cuenta, haz click en el siguiente enlace:</p>
                                {{url('/verifyemail',$email_token)}}
                                <p> </p>
                                <p>Race-tic</p>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="lastdiv">
                                    © 2017 <a href="http://racetic.com" target="_blank" class="link">http://racetic.herokuapp.com/</a>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>

</body>
</html>