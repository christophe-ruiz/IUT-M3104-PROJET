<main class="main">
    <nav class="corps">
        <h2> Les plus récents </h2>
        <article class="topic">
            <span> Tichop </span>
            <p> Salut FreeNote </p>
            <p> Voir plus > </p>
        </article>
        <article class="topic">
            <span> Tichop </span>
            <p> Salut FreeNote </p>
            <p> Voir plus > </p>
        </article>
        <article class="topic">
            <span> Tichop </span>
            <p> Salut FreeNote </p>
            <p> Voir plus > </p>
        </article>
        <article class="topic">
            <span> Tichop </span>
            <p> Salut FreeNote </p>
            <p> Voir plus > </p>
        </article>
    </nav>
    <?php
        if (!isset($_SESSION['currentUser'])) require_once 'presentation.php';
        else require_once 'mostLiked.php';
    ?>

</main>