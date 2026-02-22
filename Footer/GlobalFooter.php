<!--
    Purpose of this File:
  - Both Index.php and Browse.php originally contained the same footer code (shown below).
  - I decided it would be more efficient to move this into a separate file and use PHP to include it instead.
  - This approach improves site performance and makes the structure cleaner.
  - I also linked the global stylesheet within this file so the footer styling remains consistent across the entire website.
  
  2.0
  - Added Styles sheet link
-->

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
  <!-- Global Style Sheet -->
  <link rel="stylesheet" href="css/GStyles.css">
  <!-- Footer -->
  <footer class="py-4 text-center text-secondary border-top border-secondary">
    <div class="container">
      <p class="mb-0">Haydn Maguire © <?php echo date("Y"); ?></p>
    </div>
  </footer>

