<html>
<head>
   <style>

        *{
            padding: 0;
            margin: 0;
            text-decoration: none;
            list-style: none;
            box-sizing: border-box;
        }

        .navBody{
            font-family: 'Poppins', sans-serif;
        }

        nav{
            background: rgb(31, 56, 56);
            height: 80px;
            width: 100%; 
        }

        label.logo{
            color : white;
            font-size: 35px;
            line-height: 80px;
            padding: 0 50px;
            font-weight: bold;
        }
        nav ul{
            float: right;
            margin-right: 20px;

        }
        nav ul li{
            display: inline-block;
            line-height: 80px;
            margin: 0 5px;
        }
        nav ul li a{
            color: white;
            font-size: 17px;
            padding: 7px 2px;
            border-radius: 3px ;
            text-transform: uppercase;
        }
        .active, a:hover{
            background: rgb(31, 56, 56);
            transition: .5s;
        }
        .checkbtn{
            font-size: 30px;
            color: white;
            float:right;
            line-height: 80px;
            margin-right: 40px;
            cursor: pointer;
            display: none;
        }
        #check{
            display: none;
        }
        @media (max-width: 952px){
            label.logo{
                font-size: 30px;
                padding-left: 50px;
            }
            nav ul li a{
                font-size: 16px;
            }

        }
        @media (max-width: 858px){
            .checkbtn{
                display: block;
            }
            
            ul{
                position: fixed;
                width: 100%;
                height: 100vh;
                background: #2c3e50;
                top: 80px;
                left: -100%;
                text-align: center;
                transition: all .5s;
            }
            nav ul li{
                display: block;
                margin: 50px 0;
                line-height: 30px;

            }
            nav ul li a{
                font-size: 20px;
            }
            a:hover,a.active{
                background: none;
                color: #4284c6;
                
            }
            #check:checked ~ ul{
               left: 0; 
            }

        }
        .sidebar {
         position: fixed;
         top: 80px;
         left: 0;
         width: 200px;
         height: 100%;
         background-color: rgb(31, 56, 56);
         color: white;
         padding: 20px;
         box-sizing: border-box;
         font-family: 'Poppins', sans-serif;
      }
      
      .sidebar h2 {
         font-size: 18px;
         font-weight: bold;
         margin-bottom: 20px;
      }
      
      .sidebar p {
         font-size: 16px;
         line-height: 1.5;
      }
      .sidebar img {
  width: 100%;
  height: auto;
  margin-bottom: 10px;
  border-radius: 5px;
}

</style>
</head>
<body class="navBody">
<div class="sidebar">
      <h2>Hospital Gallery</h2>
      <img src="../image/hms1.jpg" alt="Hospital Image">
      <img src="../image/hms2.jpg" alt="Hospital Image">
      <img src="../image/hms3.jpg" alt="Hospital Image">
      </div>
    <nav>
            <input type="checkbox"  id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars">=</i>
            </label>

            <label class="logo">MyDoctor</label>

            <ul>
            
                <li><a class="active" aria-current="page" href="../view/Homepage.php">Home</a></li>
            
                <li><a class="nav-link" href="../view/viewprofile.php">View Profile</a></li>
               
                <li><a class="nav-link" href="../view/noticeboard.php">Notice Board</a></li>
            
                <li><a class="nav-link" href="../view/doctorlistdashboard.php">Doctor & Receptionist list</a></li>
            
                <li><a class="nav-link" href="../view/historycheck.php">Medical History Tracing</a></li>
            
                <li><a class="nav-link" href="../view/inventory.php">Inventory</a></li>
            
                <li><a class="nav-link" href="../view/salary.php">Salary</a></li>
            
                <li><a class="nav-link" href="../controller/logout.php">Logout</a></li>
                
            </ul>

    </nav>

</body>
</html>