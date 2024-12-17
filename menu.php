<header class="menu">
    <ul>
        <li><a href="#home" class="nav-link">Home</a></li>
        <li><a href="#projects" class="nav-link">Projects</a></li>
        <li><a href="#contact" class="nav-link">Contact</a></li>
    </ul>
    <div class="language-selector">
        <select id="language" onchange="changeLanguage(this.value)">
            <option value="pt-BR" <?php echo ($language == 'pt-BR') ? 'selected' : ''; ?>>Português</option>
            <option value="en" <?php echo ($language == 'en') ? 'selected' : ''; ?>>English</option>
            <option value="it" <?php echo ($language == 'it') ? 'selected' : ''; ?>>Italiano</option>
        </select>
    </div>
</header>