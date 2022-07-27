function insertDept() {
    let code = `
            <h4>Enter Department Data</h4>
            <form class="card card-body form-bg" method="post" action="" id="department" >
              <table>

                <label>
                <tr>
                  <td><span>Name</span></td>
                  <td> <input type="text" name="dept_name" id="dept_name"  pattern=".{1,30}" required title="min character is 1 max character is 30" placeholder="Computer Science" required><br>
                  </td> 
                </tr>               
                </label>   

                <label>
                <tr>
                   <td><span>Building Name</span></td>
                   <td> <input type="text" name="build_name" id="build_name"  pattern=".{1,30}" required title="min character is 1 max character is 30" placeholder="Department Computer Science" required><br>
                   </td>
                </tr>
                </label>  

                <label>
                <tr>
                   <td><span>Budget</span></td>
                   <td> <input type="number" name="budget" id="budget"  pattern=".{1,30}" required title="min digit is 1 max digit is 30" placeholder="10000000" required><br>
                   </td>
                </tr>
                </label>
                
              </table>
              <button class="submit entryBtn cursor_pointer" name="insert_into_dept" >Submit</button>        
            </form>
        `;
    document.getElementById("data_insert").innerHTML = code;
}

function insertCourse() {
    let code = `
    <h4>Enter Course Data</h4>
    <form class="card card-body form-bg" method="post" action="" id="course" >
      <table>

        <label>
        <tr>
          <td><span>Course ID</span></td>
          <td> <input type="number" name="course_id" id="course_id"  pattern=".{1,4}" required title="min digit is 1 max digit is 4" placeholder="1234" required><br>
          </td> 
        </tr>               
        </label>   

        <label>
        <tr>
           <td><span>Title</span></td>
           <td> <input type="text" name="title" id="title"  pattern=".{1,30}" required title="min character is 1 max character is 30" placeholder="MSC" required><br>
           </td>
        </tr>
        </label>  

        <label>
        <tr>
           <td><span>Department</span></td>
           <td> <input type="text" name="dept_name" id="dept_name"  pattern=".{1,30}" required title="min char is 1 max char is 30" placeholder="Computer Science" required><br>
           </td>
        </tr>
        </label>

        <label>
        <tr>
           <td><span>Credits</span></td>
           <td> <input type="number" name="credits" id="credits"  pattern=".{1,4}" required title="min digit is 1 max digit is 4" placeholder="10" required><br>
           </td>
        </tr>
        </label>
        
      </table>
      <button class="submit entryBtn cursor_pointer" name="insert_into_course" >Submit</button>        
    </form>
        `;
    document.getElementById("data_insert").innerHTML = code;
}

function insertInstructor() {
    let code = `
    <h4>Enter Teacher Data</h4>
    <form class="card card-body form-bg" method="post" action="" id="course" >
      <table>

        <label>
        <tr>
          <td><span>ID</span></td>
          <td> <input type="number" name="id" id="id"  pattern=".{1,4}" required title="min digit is 1 max digit is 4" placeholder="1234" required><br>
          </td> 
        </tr>               
        </label>   

        <label>
        <tr>
           <td><span>Name</span></td>
           <td> <input type="text" name="name" id="name"  pattern=".{1,30}" required title="min character is 1 max character is 30" placeholder="MSC" required><br>
           </td>
        </tr>
        </label>  

        <label>
        <tr>
           <td><span>Department</span></td>
           <td> <input type="text" name="dept_name" id="dept_name"  pattern=".{1,30}" required title="min char is 1 max char is 30" placeholder="Computer Science" required><br>
           </td>
        </tr>
        </label>

        <label>
        <tr>
           <td><span>Salary</span></td>
           <td> <input type="number" name="salary" id="salary"  pattern=".{1,10}" required title="min digit is 1 max digit is 10" placeholder="40000" required><br>
           </td>
        </tr>
        </label>
        
      </table>
      <button class="submit entryBtn cursor_pointer" name="insert_into_instructor" >Submit</button>        
    </form>
        `;
    document.getElementById("data_insert").innerHTML = code;
}



function insertStudent() {
    let code = `
    <h4>Enter Student Data</h4>
    <form class="card card-body form-bg" method="post" action="" id="course" >
      <table> 

        <label>
        <tr>
           <td><span>Name</span></td>
           <td> <input type="text" name="name" id="name"  pattern=".{1,30}" required title="min character is 1 max character is 30" placeholder="Arun" required><br>
           </td>
        </tr>
        </label>  

        <label>
        <tr>
           <td><span>Subject</span></td>
           <td> <input type="text" name="subject" id="subject"  pattern=".{1,30}" required title="min char is 1 max char is 30" placeholder="Algorithm" required><br>
           </td>
        </tr>
        </label>

        <label>
        <tr>
           <td><span>Department</span></td>
           <td> <input type="text" name="dept_name" id="dept_name"  pattern=".{1,30}" required title="min char is 1 max char is 30" placeholder="Computer Science" required><br>
           </td>
        </tr>
        </label>

        <label>
        <tr>
           <td><span>Course Name</span></td>
           <td> <input type="text" name="course_name" id="course_name"  pattern=".{1,30}" required title="min char is 1 max char is 30" placeholder="MSC" required><br>
           </td>
        </tr>
        </label>


        <label>
        <tr>
           <td><span>Marks</span></td>
           <td> <input type="number" name="marks" id="marks"  pattern=".{1,3}" required title="min digit is 1 max digit is 3" placeholder="90" required><br>
           </td>
        </tr>
        </label>

        <label>
        <tr>
           <td><span>Attendance Percentage</span></td>
           <td> <input type="number" name="attendance_perc" id="attendance_perc"  pattern=".{1,3}" required title="min digit is 1 max digit is 3" placeholder="85" required><br>
           </td>
        </tr>
        </label>
        
      </table>
      <button class="submit entryBtn cursor_pointer" name="insert_into_student" >Submit</button>        
    </form>
        `;
    document.getElementById("data_insert").innerHTML = code;
}