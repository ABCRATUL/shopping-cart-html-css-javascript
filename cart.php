<html>
<table>
<head>
<script src="cartinsertion.js"></script>
<body>

<nav class="">
    <div class="show">
    <div class="row">
        <div class="col">
		
            <button type="button"data-toggle="collapse" href="#collapseExample" data-target="#cart">Cart (<span class="total-count" id="total-count"></span>)</button><button class="clear-cart btn btn-danger">Clear Cart</button></div>
   <input type="hidden" value="total-cart" name="total-cart" id="total-cart" />
   </div></div>
</nav>

</br>
</br>
<form action="checkout.php" method="post">
<input type="hidden" name="total" value="total_cart">
 
    
<<div class="row">
<div class="col">
        <div class="mt-md-8">
            <img src="lastofus.jpg" style="width:20%">
            <p class="card-text">Price:Rs 999</p>
            <div> <a href="#" data-name="lastofus" data-price="999" onclick="incrementValue()" class="add-to-cart btn btn-primary">Add</a>
            <p id="result1"></p>
            <a href="#" data-name="lastofus" data-price="999" onclick="decrementValue()" class="delete-from-cart btn btn-primary">Delete</a>
        </div>
        </div>
</div>
        <div class="col">
        <div class="mt-md-2">
            <img src="infamous.jpg" style="width:60%">
            <p class="card-text">Price:Rs 599</p>
            <div> <a href="#" data-name="infamous" data-price="599" onclick="incrementValue()" class="add-to-cart btn btn-primary">Add</a>
                <p id="result2"></p>
                <a href="#" data-name="infamous" data-price="599" onclick="decrementValue()" class="delete-from-cart btn btn-primary">Delete</a>
            </div>
        </div>
        </div>
        <div class="col">
            <div class="mt-md-2">
            <img src="harrypotter.jpg" style="width:60%">
                <p class="card-text">Price:Rs 299</p>
                <div> <a href="#" data-name="harrypotter" data-price="299" onclick="incrementValue()" class="add-to-cart btn btn-primary">Add</a>
                    <p id="result3"></p>
                    <a href="#" data-name="harrypotter" data-price="299" onclick="decrementValue()" class="delete-from-cart btn btn-primary">Delete</a>
                </div>
        </div>
        </div>
    </div>
 
                <h5>Cart</h5>
				
                <div>
                <tr class="show-cart table">
                </tr>
<td>Total price: <span class="total-cart" id="total-cart" name="total-cart" value="total-cart" >

			
				</span>
				
               
			
				
				
				
				  
                   




                    </td>
            </div>
            
    </div>

    </div>
    </div>
           


<div class="">
             
                 <button type="button"   href="#collapseExample" style="margin-right: 480px" id="checkout" type="submit" name="action"><a href="checkout.php" class="waves-effect waves-light btn" value="">Checkout</a></button></div>
         
		 </tr> </div></form>
			


</body>
</html>
