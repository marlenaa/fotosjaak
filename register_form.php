<center>
	<form action="./index.php?content=register" method="post">
        <table class= "simple">
        		<tr><td></td><td>Registreer</td></tr>
                <tr>
                        <td>voornaam:</td>
                        <td><input type="text" name="firstname" /></td>
                </tr>
                
                <tr>
                        <td>tussenvoegsel</td>
                        <td><input type="text" name="infix" /></td>
                </tr>
                <tr>
                        <td>achternaam</td>
                
                        <td><input type="text" name="surname" /></td>
                </tr>
                <tr>
                        <td>straat + huisnummer</td>
                        <td>
                                <input type="text" name="address" />
                                <input type="number" min="0" max="18923" name="addressnumber"/>
                        </td>
                </tr>
                <tr>
                        <td>Stad: </td>
                        <td>
                                <input type="text" name="city" />
                        </td>
                </tr>
                <tr>
                        <td>Postcode: </td>
                        <td>
                                <input type="text" name="zipcode" />
                        </td>
                </tr>
                <tr>
                        <td>land: </td>
                        <td>
                                <input type="text" name="country" />
                        </td>
                </tr>
                <tr>
                        <td>email: </td>
                        <td>
                                <input type="email" name="email" />
                        </td>
                </tr>
                <tr>
                        <td>telefoonnummer</td>                      
                        <td>
                                <input type='text' name='phonenumber' />
                        </td>
                </tr>   
                <tr>
                        <td>mobiel_nummer</td>                        
                        <td>
                                <input type='text' name='mobile_phonenumber' />
                        </td>
                </tr>              
                <tr>
                		<td></td>
                        <td><input type="submit" name="submit" value="verstuur" /></td>
                </tr>
        </table>
</form>   
</center> 