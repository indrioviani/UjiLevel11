<form action="{{ route('contact.send') }}" method="POST">
    @csrf
    <div>
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div>
        <label for="subject">Subjek:</label>
        <input type="text" id="subject" name="subject" required>
    </div>
    <div>
        <label for="message">Pesan:</label>
        <textarea id="message" name="message" required></textarea>
    </div>
    <button type="submit">Kirim</button>
</form>
