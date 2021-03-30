import React from 'react';
import { useEffect } from '@storybook/client-api';
import FeaturedBlogPosts from './FeaturedBlogPosts.twig';

import FeaturedBlogPostsData from './FeaturedBlogPosts.yml';

import FeaturedBlogPostsAltData from './FeaturedBlogPosts--alt.yml';

import 'slick-carousel';
import './FeaturedBlogPosts';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Featured Blog Posts' };

export const featuredBlogPosts = () => {
  useEffect(() => Drupal.attachBehaviors(), []);

  return (
    <div
      dangerouslySetInnerHTML={{
        __html: FeaturedBlogPosts(FeaturedBlogPostsData),
      }}
    />
  );
};

export const altFeaturedBlogPosts = () => {
  useEffect(() => Drupal.attachBehaviors(), []);

  return (
    <div
      dangerouslySetInnerHTML={{
        __html: FeaturedBlogPosts(FeaturedBlogPostsAltData),
      }}
    />
  );
};
