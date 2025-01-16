<?php
$imageName = isset($_GET['image']) ? $_GET['image'] : null;

if ($imageName) {
    $imagePath = 'images/' . $imageName;

    // Check if the file exists
    if (file_exists($imagePath)) {
?>
        <!DOCTYPE html>
        <html lang="en">
        <?php include('header.php') ?>
        <section id="about-us" class="about">
            <div class="profile_img">
                <img src="<?php echo htmlspecialchars($imagePath); ?>" alt="<?php echo htmlspecialchars($imageName); ?>">

            </div>
        </section>

        <?php include('footer.php') ?>
<?php
    } else {
        echo "Image not found.";
    }
} else {
    echo "No image selected.";
}
?>