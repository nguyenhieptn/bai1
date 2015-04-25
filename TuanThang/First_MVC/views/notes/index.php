<form action="<?php echo URL; ?>/notes/noteInsert" method="POST" id="Insert" class="form">
    <p><label>Notes content: </label><input type="text" name="post_content"> </p>
    <p><label>&nbsp;</label><input type="submit" name="submit" value="post"></p>
    <hr>
    <div class="listing">

        <table border="1" class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Note content</th>
                </tr>
            </thead>
            <tbody>
            <?php
            foreach($this->note_list as $value)
            {
                echo "<tr><td>".$value['note_id']."</td>";
                echo "<td>".$value['note_content']."</td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</form>

