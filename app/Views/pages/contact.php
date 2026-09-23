<section class="page-banner">
    <div class="container">
        <span class="eyebrow">Contact</span>
        <h1>Parlons de votre événement</h1>
        <p>Demande de devis, disponibilité, combinaison de prestations : tout démarre ici.</p>
    </div>
</section>

<section class="section">
    <div class="container split-grid">
        <div>
            <h2>Coordonnées</h2>
            <div class="contact-card">
                <p><strong>Téléphone :</strong> <a href="tel:+33783659843"><?= htmlspecialchars($site['brand']['phone']) ?></a></p>
                <p><strong>Email :</strong> <a href="mailto:<?= htmlspecialchars($site['brand']['email']) ?>"><?= htmlspecialchars($site['brand']['email']) ?></a></p>
                <p><strong>Zone :</strong> <?= htmlspecialchars($site['brand']['location']) ?></p>
                <p><strong>Facebook :</strong> <?= htmlspecialchars($site['brand']['facebook']) ?></p>
                <p><strong>Instagram :</strong> <?= htmlspecialchars($site['brand']['instagram']) ?></p>
            </div>
        </div>
        <div>
            <form class="contact-form" data-contact-form data-mail-recipient="<?= htmlspecialchars($site['brand']['email']) ?>">
                <label>
                    Nom
                    <input type="text" name="name" required>
                </label>
                <label>
                    Email
                    <input type="email" name="email" required>
                </label>
                <label>
                    Téléphone
                    <input type="text" name="phone">
                </label>
                <label>
                    Message
                    <textarea name="message" rows="6" required></textarea>
                </label>
                <button class="btn" type="submit">Envoyer la demande</button>
            </form>
            <script>
                document.querySelector('[data-contact-form]').addEventListener('submit', (event) => {
                    event.preventDefault();
                    const form = event.target;
                    const data = new FormData(form);
                    const body = [
                        'Nom : ' + data.get('name'),
                        'Email : ' + data.get('email'),
                        'Téléphone : ' + (data.get('phone') || '-'),
                        '',
                        data.get('message'),
                    ].join('\n');
                    window.location.href = 'mailto:' + encodeURIComponent(form.dataset.mailRecipient)
                        + '?subject=' + encodeURIComponent('Demande de devis - ' + data.get('name'))
                        + '&body=' + encodeURIComponent(body);
                });
            </script>
        </div>
    </div>
</section>
