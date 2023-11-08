import './bootstrap';

import * as Sentry from "@sentry/browser";

Sentry.init({
    dsn: import.meta.env.VITE_SENTRY_DSN_PUBLIC,
    integrations: [
      new Sentry.Replay({
        // Additional SDK configuration goes in here, for example:
        maskAllText: true,
        blockAllMedia: true,
      }),
    ],
    replaysOnErrorSampleRate: 1.0,
    tracesSampleRate: 1.0,
});
