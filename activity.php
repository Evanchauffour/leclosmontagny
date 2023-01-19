<?php
    // Header
    get_header();

    //Activities
    $activities = get_field('activities');

    //Template name: Activity 
?>

<div class="container-activity">
    <h1>Activités</h1>

<div class="grid">
<?php 
    foreach(array_merge($activities, $activities, $activities) as $activity):
?>
    <div class="grid-item">
        <img src="<?php echo($activity['image']['url']) ?>" alt="">
        <div class="text">
            <h2><?php echo($activity['title']) ?></h2>
            <p><?php echo($activity['info']) ?></p>
        </div>
    </div>
<?php endforeach; ?>
</div>
</div>

<?php 
get_footer();