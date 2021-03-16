import React from 'react';

import Button from './Button/Button.twig';

import ButtonData from './Button/Button.yml';

/**
 * Storybook Definition.
 */
export default {
  component: Button,
  title: 'Atoms/Button',
};

export const RegularButton = () => (
  <div dangerouslySetInnerHTML={{ __html: Button(ButtonData) }} />
);
