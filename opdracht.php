<?php 
        require_once("class/OrderClass.php");
        
        $userrole = array('customer', 'root', 'admin');
        include("security.php"); 

        if ( isset($_POST['submit']))
        {                        
                OrderClass::insert_into_order($_POST);        
                //var_dump($_POST);exit();
                echo "Uw geplaatste opdracht is correct ontvangen. U krijgt een<br>
                          bevestigingsemail toegestuurd. U wordt doorgestuurd naar de<br>
                          homepage";
                header("refresh:6;index.php?content=homepage_customer");                
        }
        else 
        {        
?>
<p>Plaats een opdracht</p>

<form action='index.php?content=opdracht' method='post'>
	<table class='simple'>
	<tr>
		<td>
			Korte omschrijving
		</td>
		<td>
			<textarea rows="5" cols="50" name="order_short" placeholder= "Geef een korte omschrijving"></textarea>	
		</td>
	</tr>
	<tr>
		<td>
			Uitgebreide omschrijving 
		</td>
		<td>
			<textarea rows="5" cols="50" name="order_long" placeholder= "Geef een langere omschrijving"></textarea>	
		</td>
	</tr>
	<tr>
		<td>
			Datum oplevering 
		</td>
		<td>
			<input type="text" name="delivery_date" id="Datepicker" />
			<script type="text/javascript">$("#Datepicker").datepicker({ dateFormat: "yy-mm-dd" });</script>
		</td>
	</tr>
	<tr>
		<td>
			Geef de datum van het evenement  
		</td>
		<td>
			<input type="text" name="event_date" id="date" />
			<script type="text/javascript">$("#date").datepicker({ dateFormat: "yy-mm-dd" });</script>
		</td>
	</tr>
	<tr>
		<td>
			Zwart/wit of kleur
		</td>
		<td>
			<select name="color"><option value="Selecteer">selecteer een kleur</option><option value="Kleur">Kleur</option><option value="Zwart/wit">Zwart/wit</option></select>
		</td>
	</tr>
	<tr>
		<td>
			Aantal foto's
		</td>
		<td>
			<input type="number" name="number" min="1" max=""/>
		</td>
	</tr>
	</tr>              
                <tr>
                		<td></td>
                        <td><input type="submit" name="submit" value="verstuur" /></td>
                </tr>
</table>
</form>

<?php
}
?>