<?php

$conn = mysqli_connect('localhost','root','','ajax');

$search = $_POST['search'];

$searchdata = "SELECT * FROM `insertdata` WHERE CONCAT(`id`, `username`, `password`)LIKE '%".$search."%' ";

$result = mysqli_query($conn,$searchdata);

if(mysqli_num_rows($result) > 0 ){
while($data = mysqli_fetch_array($result)){
    ?>

<tr>
    <td>
        <?php echo $data['id']  ?>
    </td>

    <td>
        <?php echo $data['username'] ?>
    </td>

    <td>
        <?php echo $data['password']  ?>

    </td>
    <td>
        <button class="btn btn-danger" onclick="Delete(<?php echo $data['id']  ?>)"> <i class="fas fa-trash"></i>
        </button>
    </td>
    <td>
        <button class="btn btn-success" onclick="Edit(<?php echo $data['id']  ?>)"><i class="fas fa-pencil"></i>
        </button>
    </td>
</tr>
<?php
    
}
}




?>