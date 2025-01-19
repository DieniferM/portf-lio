<header class="menu">
    <ul>
        <li><a href="#home" class="nav-link" id="home-link"><?php echo $translations[$language]['home']; ?></a></li>
        <li><a href="#tech" class="nav-link" id="tech-link"><?php echo $translations[$language]['technologies']; ?></a></li>
        <li><a href="#projects" class="nav-link" id="projects-link"><?php echo $translations[$language]['projects']; ?></a></li>
        <li><a href="#contact" class="nav-link" id="contact-link"><?php echo $translations[$language]['contact']; ?></a></li>
    </ul>
    <div class="language-selector">
        <select id="language" onchange="changeLanguage(this.value)">
            <option value="pt-BR" <?php echo ($language == 'pt-BR') ? 'selected' : ''; ?>>Português</option>
            <option value="en" <?php echo ($language == 'en') ? 'selected' : ''; ?>>English</option>
            <option value="it" <?php echo ($language == 'it') ? 'selected' : ''; ?>>Italiano</option>
        </select>
    </div>
</header>
