import { NavLink } from 'react-router-dom';
import styled from 'styled-components';

export const PostCardContainer = styled(NavLink)`
width: 100%;
  text-decoration: none;
  display: flex;
  flex-direction: row;
  gap: 0.25rem;
  padding: 1rem;

  background: ${props => props.theme['base-post']};
  border-radius: 10px;
  border: 2px solid transparent;

  height: 130px;
  overflow: hidden;

  transition: border 0.2s;

  cursor: pointer;
  header {
    display: flex;
    justify-content: space-between;
    gap: 1rem;
    h1 {
      font-weight: 500;
      font-size: 1rem;
        line-height: 1.5;
      color: ${props => props.theme['base-title']};
      
    }
    
    span {
      font-size: 0.7rem;
      line-height: 1.5;
      color: ${props => props.theme['base-span']};
      
      
    }
  }
  
  main {
    height: 112px;
    overflow: hidden;
    p {
      height: 100%;
      text-align: justify;
      color: ${props => props.theme['base-text']};
    }
  }



&:hover {
  border: 2px solid ${props => props.theme['base-label']};
}

`;
