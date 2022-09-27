<?php

function addUser($name, $email, $password, $status) 
{
  $user=[];
  $newUser = [
    "username" => $name,
    "email" => $email,
    "password" => $password,
    "status" => $status
  ];
  
  array_push ($user, $newUser);
  return $user;
}

$users = addUser("aung aung", "aung@gmail.com","12345", true);


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