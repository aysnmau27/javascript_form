<html>
    <head>
        <title>Table Form</title>
    </head>
    <body>

    <h1>Student Record</h1>

    <table id="student_record" border="1">
        <!-- WALANG LAMAN -->
    </table>

    <!-- INTERNAL -->
    <script>
        const student_record = document.getElementById("student_record");

        console.log("Hello World");

        const row1 = student_record.insertRow();

        const row1col1 = row1.insertCell();
        row1col1.innerHTML = "Last Name";

        const row1col2 = row1.insertCell();
        row1col2.innerHTML = "First Name";

        const row2 = student_record.insertRow();
        const row2col1 = row2.insertCell();
        const row2col2 = row2.insertCell();

        const row3 = student_record.insertRow();
        const row3col1 = row3.insertCell();
        row3col1.colSpan = 2;

        const submitButton = document.createElement("INPUT");
        submitButton.type = "submit";
        submitButton.value = "submit";
        row3col1.append(submitButton);

        const inputLastName = document.createElement("INPUT");
        inputLastName.type = "text";
        inputLastName.placeholder = "Enter Last Name";

        row2col1.append(inputLastName);

        const inputFirstName = document.createElement("INPUT");
        inputFirstName.type = "text";
        inputFirstName.placeholder = "Enter First Name";

        row2col2.append(inputFirstName);

        console.log(student_record);
    </script>
    </body>
</html>