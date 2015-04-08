<?php
require_once('includes/cmsApplication.php');
class TodolistApplication extends CmsApplication{
        function addtodotask()
	{
		//echo 'Akan menambahkan data pekerjaan yang akan dialkukanke database';
		echo '<pre>';print_r($_REQUEST);echo '</pre>';	
	}
                function viewtodolist()
        {
            echo 'this will show all todo tasks from database';
        }
        function display()
        {
            $this->displayDashboard();
        }
        private function displayDashboard()
        {
            ?>
              <div>
                <h3>Todolist Application Dashboard</h3>
                 <a href="index.php?app=todolist&task=addtaskform">Add Todo Task</a>
                <br/>
                <a href="#">View Todo List</a>
              </div>
            <?php
        }
        function addtaskform()
{	
    ?>
       <div>
        <h3>Todolist Application Dashboard</h3>
          <form>
          <input type="hidden" name="app" value="todolist"/>
          <input type="hidden" name="task" value="addtodotask"/>
 
          <label for="title">Title</label>
          <input type="text" name="title"/>
		  <br>
		  <br>
          <label for="desc">Description</label>
          <textarea name="desc"></textarea>
		  <br>
		  <br>
          <input type="submit" value="Add Task"/>            
         </form>
	</div>
</br>	
    <?php
}

}
?>


