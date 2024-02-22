import app from 'flarum/admin/app';

app.initializers.add('gmsl/flarum-abc', () => {
  console.log('[gmsl/flarum-abc] Hello, admin!');
});
