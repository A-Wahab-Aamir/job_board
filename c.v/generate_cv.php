<?php
require('fpdf.php'); // Include the FPDF library

// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "c.v";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data is not empty
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect and sanitize form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $address = htmlspecialchars($_POST['address']);
    $phone = htmlspecialchars($_POST['phone']);
    $education = htmlspecialchars($_POST['education']);
    $experience = htmlspecialchars($_POST['experience']);
    $skills = htmlspecialchars($_POST['skills']);

    // Insert data into database
    $sql = "INSERT INTO user (name, email, address, phone, education, experience, skills)
            VALUES ('$name', '$email', '$address', '$phone', '$education', '$experience', '$skills')";

    if ($conn->query($sql) === TRUE) {
        // Create instance of FPDF
        $pdf = new FPDF();
        $pdf->AddPage();
        
        // Title (Name)
        $pdf->SetFont('Arial', 'B', 24);
        $pdf->SetTextColor(31, 43, 123); // #1f2b7b color for headings
        $pdf->Cell(0, 10, $name, 0, 1, 'C');

        // Contact Information
        $pdf->SetFont('Arial', 'I', 12);
        $pdf->SetTextColor(100, 100, 100);
        $pdf->Cell(0, 10, $email, 0, 1, 'C');
        $pdf->Cell(0, 10, $address, 0, 1, 'C');
        $pdf->Cell(0, 10, $phone, 0, 1, 'C');
        $pdf->Ln(10);

        // Draw a thick line
        $pdf->SetDrawColor(251, 36, 106); // #fb246a color for line
        $pdf->SetLineWidth(2); // Thick border line
        $pdf->Line(10, $pdf->GetY(), 200, $pdf->GetY());
        $pdf->Ln(5);

        // Education Section
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->SetTextColor(31, 43, 123); // #1f2b7b color for headings
        $pdf->Cell(0, 10, "Education", 0, 1);
        $pdf->SetFont('Arial', '', 12);
        $pdf->SetTextColor(0, 0, 0);
        $pdf->MultiCell(0, 10, $education);
        $pdf->Ln(5);
        $pdf->SetDrawColor(251, 36, 106); // #fb246a color for line
        $pdf->Line(10, $pdf->GetY(), 200, $pdf->GetY());
        $pdf->Ln(5);

        // Experience Section
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->SetTextColor(31, 43, 123); // #1f2b7b color for headings
        $pdf->Cell(0, 10, "Experience", 0, 1);
        $pdf->SetFont('Arial', '', 12);
        $pdf->SetTextColor(0, 0, 0);
        $pdf->MultiCell(0, 10, $experience);
        $pdf->Ln(5);
        $pdf->SetDrawColor(251, 36, 106); // #fb246a color for line
        $pdf->Line(10, $pdf->GetY(), 200, $pdf->GetY());
        $pdf->Ln(5);

        // Skills Section
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->SetTextColor(31, 43, 123); // #1f2b7b color for headings
        $pdf->Cell(0, 10, "Skills", 0, 1);
        $pdf->SetFont('Arial', '', 12);
        $pdf->SetTextColor(0, 0, 0);
        $pdf->MultiCell(0, 10, $skills);
        
        // Output the PDF
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="cv_' . $name . '.pdf"');
        $pdf->Output();
    } else {
        // echo "Error: " . $sql . "<br>" . $conn->error;
        echo "<script>alert('Already A CV is Built on This Email Address')</script>";
        echo "<script>window.location.href='c.v.php'</script>";
    }
} else {
    echo "No form data submitted";
}

// Close connection
$conn->close();
?>
