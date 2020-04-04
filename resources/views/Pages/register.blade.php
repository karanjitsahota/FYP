<style>

        .button1 {
          background-color: #008CBA;
          border: none;
          color: white;
          padding: 15px 32px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 4px 2px;
          cursor: pointer;
          border-radius: 4px;
          position: relative; 
          left: 40px;
            }
        .button1 {
          -webkit-transition-duration: 0.4s; /* Safari */
          transition-duration: 0.4s;
        }
        
        .button1:hover {
          background-color: #6574cd; /* Green */
          color: white;
        }
        .form-signin {
        padding: 10px;
	      position: relative;
        top: 10px;
        left: 450px;
        }

        input[type=text] {
         width: 50%;
         position: relative;
         left: 10px;
         padding: 10px 10px;
         margin: 8px 0;
         box-sizing: border-box;
        }
        .form {
        align: center;
        height: 290px;
        width: 500px;
        padding: 10px;
        box-shadow: 0px 0px 10px;
        margin: 0 auto;
        position: relative;
        top: 20px;
      }
        .h1{
          position: relative;
          left: 500px;
        }

        } 
        </style>
        <body>
            <h1 class="h1">Register an account</h1>
            <button class="button1" button onclick="location.href='{{ url('/Login') }}'" type="button">Register here</button>
            <div class="form">
             
                <form>
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="fname">
                    <br>
                    <label for="lname">Last Name:</label>
                    <input type="text" id="lname" name="lname">
                    <br>
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email">
                    <br>
                    <label for="phoneno">Contact number:</label>
                    <input type="text" id="phoneno" name="phoneno">
                  </form>
                
                </div>
        </body>