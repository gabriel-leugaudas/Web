// Cache on install
const staticCacheName = 'cache-v1';
const filesToCache = ['/','index.html']

this.addEventListener("install", event => {
  this.skipWaiting();

  event.waitUntil(
    caches.open(staticCacheName)
      .then(cache => {
        return cache.addAll(filesToCache);
    })
  )
});