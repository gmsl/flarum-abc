import app from 'flarum/forum/app';

app.initializers.add('gmsl/flarum-abc', () => {
  console.log('[gmsl/flarum-abc] Hello, forum!');
});
