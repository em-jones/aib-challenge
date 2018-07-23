import Page from './Page';

export const archivePosts = ({ pages }: any): Page[] => {
  const pageArray = pages
    .map((page: any) => new Page(page))
    .filter(
      (page: any) =>
        page.getPath().includes('posts') && page.getPath() !== '/posts/'
    )
    .reduce((acc: any, page: any) => [...acc, page], []);
  return pageArray;
};
