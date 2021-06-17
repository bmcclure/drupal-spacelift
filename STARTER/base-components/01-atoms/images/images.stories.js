import React from 'react';

import ResponsiveImage from './Image/ResponsiveImage.twig';
import Figure from './Image/Figure.twig';
import Icons from './Icons/Icons.twig';

import ResponsiveImageData from './Image/ResponsiveImage.yml';
import FigureData from './Image/Figure.yml';

const svgIcons = require.context('../../../images/icons/', true, /\.svg$/);

/**
 * Storybook Definition.
 */
export default { title: 'Atoms/Images' };

export const responsiveImage = () => (
  <div
    dangerouslySetInnerHTML={{ __html: ResponsiveImage(ResponsiveImageData) }}
  />
);

export const figure = () => (
  <div dangerouslySetInnerHTML={{ __html: Figure(FigureData) }} />
);

const items = [];

svgIcons.keys().forEach((key) => {
  const iconName = svgIcons(key).split('static/media/').pop().split('.')[0];
  const icon = {};
  icon.value = iconName;
  items.push(icon);
});

export const icons = () => (
  <div dangerouslySetInnerHTML={{ __html: Icons({ items }) }} />
);
