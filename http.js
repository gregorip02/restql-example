const axios = require('axios');

const toBase64 = (string) => new Buffer.from(string).toString('base64');

axios.get('http://0.0.0.0:8000/api', {
    params: {
        query: toBase64(JSON.stringify({
            books: {
                take: 5,
                select: 'title'
            }
        }))
    }
}).then(({ data }) => {
    console.log(JSON.stringify(data));
});
