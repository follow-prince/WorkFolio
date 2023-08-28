import styled from 'styled-components';

export const PersonInfoContainer = styled.div`
  max-width: 864px;
  width: 80%;
  height: 212px;
  display: flex;
  box-shadow: 0px 2px 28px rgba(0, 0, 0, 0.8);
  border-radius: 20px;
  padding: 2rem;
  gap: 2rem;
  img {
    border-radius: 30px;
  }
  div {
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      h1 {
        color:white;
        font-weight: 800;
        font-size: 2.3rem;
        line-height: 130%;
      }
      a {
        font-weight: 700;
        font-size: 0.75rem;
        line-height: 100%;
        text-transform: uppercase;
        text-decoration: none;
        display: flex;
        gap: 0.5rem;
        align-items: center;
        color: ${props => props.theme.blue};
        transition: border 0.2s;
        border-bottom: 2px solid transparent;
        &:hover {
          border-bottom: 2px solid ${props => props.theme.blue};
        }
      }
    }
    main {
      p {
        margin-top: 0.5rem;
        word-wrap: break-word;
        
      }
    }
    footer {
      font-weight: 700;
      font-size: 0.75rem;
      display: flex;
      height: 100%;
      align-items: flex-end;
      gap: 1rem;
      span {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: ${props => props.theme['base-subtitle']};
        i {
          color: ${props => props.theme['base-label']};
        }
       
      }
      
    }

  }
  @media (max-width:680px) {
    display: flex;
    flex-direction: column;
    height: auto;
    align-items: center;
    justify-content: center;
    div {
      header{
      h1{
        font-weight: 700;
        font-size: 1rem;
      }
    }
    }

    footer {
      span {
      p {
        font-size:0.5rem;
       }
      }
    }
  }
  @media (max-width: 450px) {
    div {
      header {
        flex-direction: column;
        gap: 0.5rem;
        h1{
          font-weight: 700;
          font-size: 1rem;
        }
      }
      main {
        p {
          text-align: center;
        }
      }
      footer {
        display: flex;
        flex-direction: column;
        align-items: center ;
        span {
        p {
          font-size:0.5rem;
         }
        }
      }
    }
  }
`;
