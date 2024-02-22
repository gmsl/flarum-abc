import app from 'flarum/common/app';

app.initializers.add('gmsl/flarum-abc', () => {
  console.log('[gmsl/flarum-abc] Hello, forum and admin!');
});
