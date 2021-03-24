import React from 'react';

import NewsletterSignup from './NewsletterSignup.twig';

import NewsletterSignupData from './NewsletterSignup.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Molecules/Newsletter Signup' };

export const NewsletterSignupExample = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: NewsletterSignup(NewsletterSignupData),
    }}
  />
);
