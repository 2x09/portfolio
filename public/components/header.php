<nav>
    <?php foreach ($nav_items as $page => $label): ?>
        <a
            href="?page=<?= urlencode($page) ?>"
            class="<?= $page_current === $page ? 'active' : '' ?>"
        >
                <?= htmlspecialchars($label) ?>
        </a>
    
        <?php if ($page !== end($nav_items)): ?>
            <?= $seperator ?>
        <?php endif; ?>
        
    <?php endforeach; ?>
</nav>