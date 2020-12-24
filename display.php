<?php

$conn = mysqli_connect('localhost','root','','ajax');

$sql = "Select * from insertdata where 1 ";
$result = mysqli_query($conn,$sql);

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
        <button class="btn btn-danger" onclick="Delete(<?php echo $data['id']  ?>)"> <i class="fa fa-trash"></i>
        </button>
    </td>
    <td>
        <button class="btn btn-success"
            onclick="Edit(<?php echo $data['id'] ?>,'<?php echo $data['username'] ?>','<?php echo $data['password'] ?>')"><i
                class="fa fa-pencil"></i> </button>
    </td>

</tr>
<?php
    


}
}




?>