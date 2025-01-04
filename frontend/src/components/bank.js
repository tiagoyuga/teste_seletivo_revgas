import React, { useState, useEffect } from "react";
import { Button, Typography, Grid, Container, List, ListItem, ListItemText, Input } from "@mui/material";

const BancoConsulta = () => {
    const [bancos, setBancos] = useState([]);
    const [loading, setLoading] = useState(false);
    const [error, setError] = useState(null);

    const fetchBancos = async () => {
        setLoading(true);
        try {
            let apiUrl = "http://localhost:8000/api/bank";
            let code = document.getElementById("code").value;

            if (code > 0) {
                apiUrl += "?code="+code;
            }

            const response = await fetch(apiUrl);
            if (!response.ok) {
                throw new Error("Falha ao carregar os bancos");
            }
            const data = await response.json();
            //setBancos(data.data);
            setBancos(data);

        } catch (error) {
            setError(error.message);
        } finally {
            setLoading(false);
        }
    };

    useEffect(() => {
        fetchBancos();
    }, []);

    return (
        <Container>
            <Typography variant="h4" gutterBottom>
                Consultar Bancos
            </Typography>

            {loading && <Typography variant="body1">Carregando...</Typography>}
            {error && <Typography color="error">{error}</Typography>}

            {!loading && !error && (
                <Grid container spacing={3}>
                    <Grid item xs={12}>
                        <Input id={'code'} placeholder={'Pesquisar por código'}></Input>
                    </Grid>
                    <Grid item xs={12}>
                        <Button variant="contained" color="primary" onClick={fetchBancos}>
                            Atualizar Lista de Bancos
                        </Button>
                    </Grid>

                    <Grid item xs={12}>
                        <List>
                            {bancos.map((banco) => (
                                <ListItem key={banco.id}>
                                    <ListItemText
                                        primary={`Banco: ${banco.name}`}
                                        secondary={`Código: ${banco.code} | ID: ${banco.id}`}
                                    />
                                </ListItem>
                            ))}
                        </List>
                    </Grid>
                </Grid>
            )}
        </Container>
    );
};

export default BancoConsulta;
