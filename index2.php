<?php
    $users =[];

    function addUser($addArray, $user) 
    {
        
        if(!isset($user['username']) || !($user['username'])) {echo ("USER NAME IS REQUIRE");}
        
        elseif(!isset($user['password']) || !($user['password'])) {echo ("PASSWORD IS REQUIRED");}

        elseif(isset($user['password']) && strlen($user['password'])< 6) {echo ("PASSWORD MUST BE 6 DIGIT");}

        elseif(!isset($user['email']) || !($user['email'])) {echo ("EMAIL IS REQUIRED");}

        elseif(!isset($user['status'])) {echo ("STATUS IS REQUIRED");}

        else{array_push($addArray, $user); return $addArray;}

    }

    $newUsers =     [

        [
            "username"=> "mg mg",
            "password"=> "123456",
            "email"=> "mg@gmail.com",
            "status"=> true
        ],

        [
            "username"=> "mama",
            "password"=> "123566",
            "email"=> "mama@gmail.com",
            "status"=> true
        ],
        [
            "username"=> "koko",
            "password"=> "123566",
            "email"=> "koko@gmail.com",
            "status"=> false
        ]
    ];


    foreach ($newUsers as $newUser) 
    {
        $users = addUser($users, $newUser);
    }

    
    // //deleting user from array index by keyword
    foreach ($newUsers as $newUser){
    $val = "mama";
 
    $key = array_search($val, $newUser, true);
    if ($key !== false) {
        unset($newUser[$key]);
    }

    elseif (!$val){echo "USERNAME IS REQUIRED";}
 
    else  { echo json_encode($newUser);}
    }

    




      

?>

<?php 
/**
 * Render html template with user lists
 */
?>
<html>
    <head>
        <title> PHP Basic Tutorial </title>
        <style>
            table {
                width: 100%;
                padding: 10px;
                border: 1px solid #ddd;
                border-collapse: collapse;
            }

            table > thead > tr > th {
                background-color: #ddd;
            }

            table > thead > tr > th,
            table > tbody > tr > td {
                text-align: left;
                padding: 10px;
                border-bottom: 1px solid #ddd;
            }
            
            tr:hover { 
                background-color: coral;
                cursor: pointer;
            }

            .success {
                background-color: green;
                color: #fff;
            }

            .error {
                background-color: red;
                color: #fff;
            }

            .success, 
            .error {
                width: 150px;
                padding-left: 15px;
                padding-right: 15px;
                padding-bottom: 10px;
                padding-top: 10px;
            }
        </style>
    </head>

    <body>
        <table>
            <thead>
                <tr>
                    <th> # </th>
                    <th> Username </th>
                    <th> Email </th>
                    <th> Password </th>
                    <th> Status </th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($users as $key=>$user) { ?>
                    <tr>
                        <td> <?php echo $key + 1; ?> </td>
                        <td> <?php echo $user['username']; ?> </td>
                        <td> <?php echo $user['email']; ?> </td>
                        <td> <?php echo $user['password']; ?> </td>
                        <td> 
                            <?php if($user['status'] == 1) { ?>
                                <span class="success"> Active </span>
                            <?php } else { ?>
                                <span class="error"> Disable </span>
                            <?php } ?> 
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>