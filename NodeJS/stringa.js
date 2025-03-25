const { createServer } = require('node:http');
const { parse } = require('node:url');

const hostname = '127.0.0.1';
const port = 3000;

const server = createServer((req, res) => {
    const parsedUrl = parse(req.url, true);
    const inputString = parsedUrl.query.testo || "Nessun testo inserito";

    res.statusCode = 200;
    res.setHeader('Content-Type', 'text/html');

    res.end(`
        <html>
        <head><title>Input Node.js</title></head>
        <body>
            <h1>Testo ricevuto:</h1>
            <form method="GET">
                <input type="text" name="testo" placeholder="Inserisci testo">
                <button type="submit">Invia</button>
            </form>
            <p style="font-size:20px; color:blue;">${inputString}</p>
        </body>
        </html>
    `);
});
server.listen(port, hostname, () => {
  console.log(`Server running at http://${hostname}:${port}/`);
});