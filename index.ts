import express from 'express';

const app = express();

app.get('/', (req, res) => {
    return res.send('Received a GET HTTP method');
});
app.post('/reportserver/', (req, res) => {
    console.log('req', req);

    if (req.query.getListClients) {
        const result = [
            { 'title': 'The Shawshank Redemption', 'gid': 1994 },
            { 'title': 'The Godfather', 'gid': 1972 },
            { 'title': 'The Godfather: Part II', 'gid': 1974 },
            { 'title': 'The Dark Knight', 'gid': 2008 },
            { 'title': '12 Angry Men', 'gid': 1957 },
            { 'title': "Schindler's List", 'gid': 1993 },
            { 'title': 'Pulp Fiction', 'gid': 1994 },
            { 'title': 'The Lord of the Rings: The Return of the King', 'gid': 2003 },
            { 'title': 'The Good, the Bad and the Ugly', 'gid': 1966 },
            { 'title': 'Fight Club', 'gid': 1999 },
            { 'title': 'The Lord of the Rings: The Fellowship of the Ring', 'gid': 2001 },
            { 'title': 'Star Wars: Episode V - The Empire Strikes Back', 'gid': 1980 },
            { 'title': 'Forrest Gump', 'gid': 1994 },
            { 'title': 'Inception', 'gid': 2010 },
            { 'title': 'The Lord of the Rings: The Two Towers', 'gid': 2002 },
            { 'title': "One Flew Over the Cuckoo's Nest", 'gid': 1975 },
            { 'title': 'Goodfellas', 'gid': 1990 },
            { 'title': 'The Matrix', 'gid': 1999 },
            { 'title': 'Seven Samurai', 'gid': 1954 },
            { 'title': 'Star Wars: Episode IV - A New Hope', 'gid': 1977 },
            { 'title': 'City of God', 'gid': 2002 },
            { 'title': 'Se7en', 'gid': 1995 },
            { 'title': 'The Silence of the Lambs', 'gid': 1991 },
            { 'title': "It's a Wonderful Life", 'gid': 1946 },
            { 'title': 'Life Is Beautiful', 'gid': 1997 },
            { 'title': 'The Usual Suspects', 'gid': 1995 },
            { 'title': 'Léon: The Professional', 'gid': 1994 },
            { 'title': 'Spirited Away', 'gid': 2001 },
            { 'title': 'Saving Private Ryan', 'gid': 1998 },
            { 'title': 'Once Upon a Time in the West', 'gid': 1968 },
            { 'title': 'American History X', 'gid': 1998 },
            { 'title': 'Interstellar', 'gid': 2014 },
            { 'title': 'Casablanca', 'gid': 1942 },
            { 'title': 'City Lights', 'gid': 1931 },
            { 'title': 'Psycho', 'gid': 1960 },
            { 'title': 'The Green Mile', 'gid': 1999 },
            { 'title': 'The Intouchables', 'gid': 2011 },
            { 'title': 'Modern Times', 'gid': 1936 },
            { 'title': 'Raiders of the Lost Ark', 'gid': 1981 },
            { 'title': 'Rear Window', 'gid': 1954 },
            { 'title': 'The Pianist', 'gid': 2002 },
            { 'title': 'The Departed', 'gid': 2006 },
            { 'title': 'Terminator 2: Judgment Day', 'gid': 1991 },
            { 'title': 'Back to the Future', 'gid': 1985 },
            { 'title': 'Whiplash', 'gid': 2014 },
            { 'title': 'Gladiator', 'gid': 2000 },
            { 'title': 'Memento', 'gid': 2000 },
            { 'title': 'The Prestige', 'gid': 2006 },
            { 'title': 'The Lion King', 'gid': 1994 },
            { 'title': 'Apocalypse Now', 'gid': 1979 },
            { 'title': 'Alien', 'gid': 1979 },
            { 'title': 'Sunset Boulevard', 'gid': 1950 },
            { 'title': 'Dr. Strangelove or: How I Learned to Stop Worrying and Love the Bomb', 'gid': 1964 },
            { 'title': 'The Great Dictator', 'gid': 1940 },
            { 'title': 'Cinema Paradiso', 'gid': 1988 },
            { 'title': 'The Lives of Others', 'gid': 2006 },
            { 'title': 'Grave of the Fireflies', 'gid': 1988 },
            { 'title': 'Paths of Glory', 'gid': 1957 },
            { 'title': 'Django Unchained', 'gid': 2012 },
            { 'title': 'The Shining', 'gid': 1980 },
            { 'title': 'WALL·E', 'gid': 2008 },
            { 'title': 'American Beauty', 'gid': 1999 },
            { 'title': 'The Dark Knight Rises', 'gid': 2012 },
            { 'title': 'Princess Mononoke', 'gid': 1997 },
            { 'title': 'Aliens', 'gid': 1986 },
            { 'title': 'Oldboy', 'gid': 2003 },
            { 'title': 'Once Upon a Time in America', 'gid': 1984 },
            { 'title': 'Witness for the Prosecution', 'gid': 1957 },
            { 'title': 'Das Boot', 'gid': 1981 },
            { 'title': 'Citizen Kane', 'gid': 1941 },
            { 'title': 'North by Northwest', 'gid': 1959 },
            { 'title': 'Vertigo', 'gid': 1958 },
            { 'title': 'Star Wars: Episode VI - Return of the Jedi', 'gid': 1983 },
            { 'title': 'Reservoir Dogs', 'gid': 1992 },
            { 'title': 'Braveheart', 'gid': 1995 },
            { 'title': 'M', 'gid': 1931 },
            { 'title': 'Requiem for a Dream', 'gid': 2000 },
            { 'title': 'Amélie', 'gid': 2001 },
            { 'title': 'A Clockwork Orange', 'gid': 1971 },
            { 'title': 'Like Stars on Earth', 'gid': 2007 },
            { 'title': 'Taxi Driver', 'gid': 1976 },
            { 'title': 'Lawrence of Arabia', 'gid': 1962 },
            { 'title': 'Double Indemnity', 'gid': 1944 },
            { 'title': 'Eternal Sunshine of the Spotless Mind', 'gid': 2004 },
            { 'title': 'Amadeus', 'gid': 1984 },
            { 'title': 'To Kill a Mockingbird', 'gid': 1962 },
            { 'title': 'Toy Story 3', 'gid': 2010 },
            { 'title': 'Logan', 'gid': 2017 },
            { 'title': 'Full Metal Jacket', 'gid': 1987 },
            { 'title': 'Dangal', 'gid': 2016 },
            { 'title': 'The Sting', 'gid': 1973 },
            { 'title': '2001: A Space Odyssey', 'gid': 1968 },
            { 'title': "Singin' in the Rain", 'gid': 1952 },
            { 'title': 'Toy Story', 'gid': 1995 },
            { 'title': 'Bicycle Thieves', 'gid': 1948 },
            { 'title': 'The Kid', 'gid': 1921 },
            { 'title': 'Inglourious Basterds', 'gid': 2009 },
            { 'title': 'Snatch', 'gid': 2000 },
            { 'title': '3 Idiots', 'gid': 2009 },
            { 'title': 'Monty Python and the Holy Grail', 'gid': 1975 },
        ]
        res.status(200).json(result)
        return
    }

    if (req.query.getRights) {
        res.status(200).json('result')
        return
    }

    return res.status(200).json(req.body);
});

app.listen(80, () => console.log(`Example app listening on port ${80}!`));
