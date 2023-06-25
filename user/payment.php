<?php
// include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>

<style>
   *{padding:0; margin: 0; box-sizing: border-box; font-family: sans-serif;}

header{
    width: 100vw;    
    min-height: 100vh;
     background: lightblue;
     font-size: 1.2rem;
     display: flex;
    justify-content: center; 
    align-items: center;
}

.container{
    background: white;
    max-width: 800px;
    max-height: 500px;
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: 0.5rem 1.5rem;
}

.left{
    flex-basis: 50%;
}

.right{
    flex-basis: 50%;
}
form{
    padding: 1rem;
}

h3{
    margin-top: 1rem;
    color: #2c3e50;
}
form input[type="text"]{
    width: 100%;
    padding: 0.5rem 0.7rem;
    margin: 0.5rem 0;
    outline: none;   
    }

form textarea{
    width: 100%;
    padding: 0.5rem 0.7rem;
    margin: 0.5rem 0;
    outline: none;
}

#zip{
    display: flex;
    margin-top: 0.5rem;
}

#zip select{
    padding: 0.5rem 0.7rem;
}

#zip input[type="number"]{
    padding: 0.5rem 0.7rem;
    margin-left: 5px;
}

input[type="submit"]{
    width: 100%;
    padding: 0.7rem 1.5rem;
    background: #34495e;
    color: white;
    border: none;
    outline: none;
    margin-top: 1rem;
    cursor: pointer;
    }

    input[type="submit"]:hover{
        
        background: #5a92ca;
    }

    @media only screen and (max-width: 770px){
        .container{
            flex-direction: column;
        }
        body{
            overflow-x: hidden;
        }
    }
    
</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="payment.css"> -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- <link rel="stylesheet" href="C:\Users\Administrator-1\Desktop\project\final\home\style.css"> -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
</head>
<body>
   
    <header>
        <div class="container">
            <div class="left">
                <h3>BILLING ADDRESS</h3>
                <form action="">
                    Full name
                    <input type="text" name="" placeholder="Enter name" required>
                    Email
                    <input type="text" name="" placeholder="Enter email" required>
                    Address
                    <textarea  name="" rows="4" cols="50" placeholder="Enter address" required></textarea>
                    City
                    <input type="text" name="" placeholder="Enter City" required>
                    
                    <div id="zip">
                        <label for="">
                            State
                            <select name="" id="">
                                <option value="">
                                    Choose State
                                </option>
                                <option value="">
                                    Gujarat
                                </option>
                                <option value="">
                                    Rajasthan
                                </option>
                                <option value="">
                                    Maharashtra
                                </option>
                            </select>
                        </label>

                        <label for="">
                            Zip Code
                            <input type="number" placeholder="Zip Code" required>
                        </label>
                    </div>
                </form>
            </div>
            <div class="right">
                <h3>PAYMENT</h3>
                <form action="thankyou.php">
                    Accepted Card <br>
                    <img src="card1.png" alt="" width="100">
                    <img src="card2.png" alt="" width="50">
                    <br><br>


                    Credit Card Number
                    <input type="text" name="" placeholder="Enter Card Number" required>

                    Exp Month
                    <input type="text" name="" placeholder="Enter Month" required>
                    
                    <div id="zip">
                        <label for="">
                            Exp Year
                            <select name="" id="">
                                <option value="">
                                    Choose State
                                </option>
                                <option value="">
                                    2022
                                </option>
                                <option value="">
                                    2023
                                </option>
                                <option value="">
                                    2024
                                </option>
                            </select>
                        </label>

                        <label for="">
                            CVV
                            <input type="number" placeholder="CVV" required>
                        </label>
                    </div>
                    
                    <a href="thankyou.php"><input type="submit" value="Proceed to Checkout"></a>
                    
                </form>
            </div>
        </div>
    </header>
</body>
</html>